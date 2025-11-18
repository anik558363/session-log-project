# Laravel Assignment Project – README.md

## 📌 Overview

This project is built to solve a 3-part Laravel assignment involving **Request Handling**, **Session Management**, **Logging**, **Database Migrations with Foreign Keys**, and **Blade Templating**.

The project includes:

* A `/info` endpoint to handle request data, store it in session, and log user info
* Three database tables: `courses`, `students`, and `enrollments`
* A Blade layout system with a dynamic dashboard view

---

## 🚀 Features

### **Task 1: Handle Request, Session & Logging**

* Accepts `name` and `email` via query parameters
* Stores both values in session
* Logs the values using `Log::info()`
* Returns a JSON response with a custom status code

**Example request:**

```
/info?name=John&email=john@example.com
```

---

### **Task 2: Database Migrations with Foreign Keys**

Three tables are created:

#### 1. **courses**

Fields: `id`, `name`, `description`

#### 2. **students**

Fields: `id`, `name`, `email`

#### 3. **enrollments**

Fields: `id`, `student_id`, `course_id`

Foreign key rules:

* `enrollments.student_id` → references `students.id`
* `enrollments.course_id` → references `courses.id`
* Both use `cascadeOnDelete()`

---

### **Task 3: Blade Layout & Dashboard**

* A layout file `layouts/app.blade.php`
* A child view `dashboard.blade.php`
* Shows session-stored name (if exists)
* Displays a contact list using a Blade `@foreach` loop
* If empty, shows “No Contacts Found”

---

## 📁 Project Structure

```
project-root/
├─ app/
│  ├─ Http/
│  │  ├─ Controllers/
│  │  │  └─ InfoController.php
├─ resources/
│  ├─ views/
│  │  ├─ dashboard.blade.php
│  │  ├─ layouts/app.blade.php
├─ routes/
│  ├─ web.php
└─ database/
   ├─ migrations/
```

---

## 🛠️ Installation & Setup

### 1️⃣ Clone or download the project

```
git clone <project-url>
cd project-folder
```

### 2️⃣ Install dependencies

```
composer install
```

### 3️⃣ Configure environment

Copy `.env.example` → `.env`

```
cp .env.example .env
```

Update database settings:

```
DB_DATABASE=your_database
DB_USERNAME=root
DB_PASSWORD=
```

### 4️⃣ Generate application key

```
php artisan key:generate
```

### 5️⃣ Run migrations

```
php artisan migrate
```

### 6️⃣ Run local server

```
php artisan serve
```

---

## 🌐 Useful Routes

### **1. Store info in session + log**

```
GET /info?name=John&email=john@example.com
```

Returns JSON:

```json
{
  "status": "success",
  "message": "User info stored in session and logged.",
  "code": 201
}
```

### **2. View dashboard**

```
GET /dashboard
```

Displays:

* Session name
* Contact list table

---

## 🧩 Controller Used

`InfoController.php` manages both `/info` and `/dashboard` routes.


