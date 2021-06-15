#! /usr/bin/python3
#pip3 install discord.py
import mysql.connector
import discord, random, os
from discord.ext import commands
from discord.utils import get
import datetime
client = commands.Bot(command_prefix=commands.when_mentioned_or("!"), help_command=None)
#Bot commands are triggered with commmand prefix followed by function name

# All output is stored in out. This is in order to log the exact output that was printed
#While not necessary it is useful for both security and debugging

mydb = mysql.connector.connect(
  host="localhost",
  user="root",
  password="E68}eb%.@>8+LNMA",
  database="kowskicoin"
)

print(mydb)

@client.event
async def on_ready():
    print("Bot is ready")

@client.command()
async def start(ctx):
    #Function to create a user account HERE
    #ctx.message.author <-- Username of message sender
    #ctx.message.author.id <-- User ID of message sender
    #Will need to check if user already has an account. If so print an error!
    out = "This is where the user creation will be"
    await ctx.send (out)
    logevent("Start",ctx, out)

def AdjustBal (mode, number, user): #Mode can be add or sub depending on needs
#ctx.message.author <-- Username of message sender
#ctx.message.author.id <-- User ID of message sender
    if mode == 'add':
        #add kcoin here
        out=("adding ",number,"to balance of ",user)
    if mode == 'sub':
        #remove kcoin here
        out=("subtracting ",number,"to balance of ",user)
    logevent("AdjustBal", "ignorethis", out, False)



@client.command()
async def top(ctx):
    #store top 10 in out
    out = "This is where the leaderboard will be"
    await ctx.reply (out)


@client.command()
async def give(ctx, recip, koin):
    koin = int(koin)
    recip = recip[3:-1]
    #check that recip and ctx.message.author.id are valid users
    valid = True
    if valid:
        AdjustBal('sub',koin,ctx.message.author.id)
        AdjustBal('add',koin,recip)
        out = "Sucessfully performed transaction"
    else:
        out = "One or both of these users are invalid!"
    await ctx.reply (out)
    logevent("Give",ctx, out)

@client.command()
async def gamble(ctx, koin):
    #check to see if user has enough koin!
    koin = int(koin)
    bal = 999999999999 #Get bal here!
    if bal <= 0 or koin > bal:
        out = ("You do not have enough Kowski Coin!")
        logevent("gamble", ctx, out)
    else:
        responses = ['1', '2', '3', '4', '5'] #These two lines can be condensed into one random gen thingy
        response = random.choice(responses)
        if response == '1':
            randy = (random.randint(1,10) * koin)
            AdjustBal('add',randy,ctx.message.author.id)
            randy = str(randy) #Convert randy to str to make formatting nice
            out = "You won "+randy+ " Kowski coin(s)!"
        if response == '2':
            randy = (random.randint(1,10) * koin)
            AdjustBal('sub',randy,ctx.message.author.id)
            randy = str(randy) #Convert randy to str to make formatting nice
            out = "You lost "+randy+ " Kowski coin(s)!"
        if response == '3' or response =='4' or response =='5':
            out = ("You won nothing!")
        await ctx.reply (out)
        logevent("gamble",ctx,out)


@client.command()
async def kowskihelp(ctx):
    await ctx.message.author.send(""" HELP MESSAGE HERE""")
    logevent("help",ctx,"DMd user with standard help message")

@client.command()
async def bal(ctx):
    #Dsiplay bal of user inside of out
    bal = "idklmao (Fix this)"
    out = "Your current balance is "+ bal
    await ctx.reply (out)

def logevent(command, ctx,botout, isctx = True): #Function for logging events
    now = datetime.datetime.now()
    print("~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~")
    if isctx:
        print("\nFunction", command,"\nTriggered by",ctx.message.author, "ID:", ctx.message.author.id ,"\n    Message:", ctx.message.content)
    else:
        print("\nFunction", command,"\nActions", botout)
    print("Bot reply or action:","\n  ",botout)
    print("This event occured at:",str(now))
    print("~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~")

client.run("ODU0MDMzMjk3NzAwOTQ1OTUw.YMeCfQ.7yNYzx3VbvQH08mX2KmHe_O_-KU") #Key for bot KEEP THIS SAFE!
