# import websocket
# try:
#     import thread
# except ImportError:
#     import _thread as thread
# import time

# def on_message(ws, message):
#     print(message)

# def on_error(ws, error):
#     print(error)

# def on_close(ws):
#     print("### closed ###")

# def on_open(ws):
#     def run(*args):
#         for i in range(3):
#             time.sleep(1)
#             ws.send("Hello %d" % i)
#         time.sleep(1)
#         ws.close()
#         print("thread terminating...")
#     thread.start_new_thread(run, ())


# if __name__ == "__main__":
#     websocket.enableTrace(True)
#     ws = websocket.WebSocketApp("ws://idfgear.net/",
#                               on_message = on_message,
#                               on_error = on_error,
#                               on_close = on_close)
#     ws.on_open = on_open
#     ws.run_forever()


from random import randint

repeat = input('How many times would you like to repeat this practice?')
if(repeat is not int):
        print('Please provide a number')

d={} 
ans={}

def calculate(x, y):
    if (x == y):
        print(f'{string1} = {string2} GOOD JOB')
    else:
        print (f'! {string1} = {string2} GOOD LUCK NEXT TIME')

for x in range(0,repeat): 
    number1 = randint(0, 100)
    number2 = randint(0, 100)
    inpt = input(f'{number1} * {number2} = ')
    if(inpt is not int):
        pass
    ans["string{0}".format(x)] = (number1 * number2)
    d["string{0}".format(x)]  = int(input(f'{number1} * {number2} = '))

for i in range(0,repeat):
    string1 = d[f'string{i}']
    string2 = ans[f'string{i}']

    calculate(string1, string2)