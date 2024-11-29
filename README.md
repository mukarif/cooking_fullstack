# cooking_fullstack
Backend PHP Laravel and Frontend Python django

## Installation PHP
Terminal:
migrate DB
```
php artisan migrate
```
Run project
'''
php artisan serve
'''

akses URL
'''
http://localhost:8000/
'''

## Installation Django
Ubuntu atau Bash Terminal:

install virtual environment
```
$ python3 -m venv venv
```
Mengaftifkan virtual environment
```
$ source venv/bin/activate
```
Install library Python
```
(venv)$ pip install -r requirements.txt
```
Masuk ke directory App
```
(venv)$ cd dash/
```
migrations database for session
```
(venv) .../dash$ ./manage.py migrate
```
python collectstatic
```
(venv) .../dash$ ./manage.py collectstatic
```
runing Project
```
(venv) .../dash$ ./manage.py runserver 8001


akses URL
'''
http://localhost:8001/
'''
