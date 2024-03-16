# Laragigs
<p align="center">
</p>

---

<li> Welcome to laragigs application, designed  for allowing users to post their gigs or jobs and to navigate and search jobs.</li>

##  📝Table of content

---
- [Built Using](#built).
- [Features](#features).
- [Requirements](#requirements).
- [Installation Steps](#installation).
- [Acknowledgements](#acknowledgements).
- [Screenshots](#screens).


## ⛏️ Built Using <a name = "built"></a>

---
- [MySQL](https://www.mongodb.com/) - Database
- [PHP](https://www.php.net/) - Programming Language
- [Laravel](https://laravel.com/) - Web Framework
- [Tailwind Css](https://tailwindcss.com/) - Css Framework

## 🧐Features <a name = "features"></a>

---
- Login and Registration for users
- create, edit and delete gigs
- search gigs based on tags, names, job description
- pagination

## 🔧Requirements <a name = "requirements"></a>

---
- PHP => 8
- Laravel => 10
- composer
- MySQL

## 🚀 Installation Steps <a name = "installation"></a>

---

First clone this repository, install the dependencies, and setup your .env file.

```
git clone https://github.com/VlixAli/Laragigis.git
composer install
cp .env.example .env
```
add your Database credentials to your .env file and run this command to generate the app key, create and seed the database

```
php artisan key:generate
php artisan migrate --seed
php artisan storage:link
```

run the project using the following command
```
php artisan serve
```

## 🎉 Acknowledgements <a name = "acknowledgements"></a>

---
That project was created following this amazing tutorial [Laravel From Scratch 2022 | 4+ Hour Course](https://www.youtube.com/watch?v=MYyJ4PuL4pY)
on youtube.

## 📷 Screenshots <a name = "screens"></a>

---

### Home page
<img src="https://github.com/VlixAli/Laragigis/blob/master/screenshots/home1.PNG?raw=true"/>
<img src="https://github.com/VlixAli/Laragigis/blob/master/screenshots/home2.PNG?raw=true"/>

### Home page after login
<img src="https://github.com/VlixAli/Laragigis/blob/master/screenshots/home%20after%20login.PNG?raw=true"/>

### Login
<img src="https://github.com/VlixAli/Laragigis/blob/master/screenshots/login.PNG?raw=true"/>

### Registration
<img src="https://github.com/VlixAli/Laragigis/blob/master/screenshots/register.PNG?raw=true"/>

### Create a gig
<img src="https://github.com/VlixAli/Laragigis/blob/master/screenshots/create%20gig.PNG?raw=true"/>
<img src="https://github.com/VlixAli/Laragigis/blob/master/screenshots/create%20gig%202.PNG?raw=true"/>

### Edit a gig
<img src="https://github.com/VlixAli/Laragigis/blob/master/screenshots/edit%20gig.PNG?raw=true"/>

### manage your gigs
<img src="https://github.com/VlixAli/Laragigis/blob/master/screenshots/manage%20gigs.PNG?raw=true"/>





