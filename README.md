# Artist Portfolio & Commissions

**Artist Portfolio & Commissions** is a modern, responsive web application that allows artists to **showcase their artwork** and **manage commission requests** from clients. Built with **PHP + MySQL backend**, **React TypeScript frontend**, and styled with **TailwindCSS**, this project demonstrates full-stack development skills and is portfolio-ready.

Repository Link: https://github.com/IPham23/Artist-Portfolio-Commissions

---

## Features

- **Public Portfolio**
  - Responsive gallery of artworks
  - Filter by category (e.g., digital, traditional, commissions)
  - Lightbox view for individual images

- **Commission Requests**
  - Users submit commission requests (name, email, description, optional reference image)
  - Requests are stored in MySQL
  - Track status: Pending → Accepted → Completed

- **Artist Dashboard**
  - View all commission requests
  - Update status of each request
  - Minimalist, responsive dashboard UI

---

## Tech Stack

| Layer      | Technology |
|------------|-----------|
| Frontend   | React + TypeScript + TailwindCSS |
| Backend    | PHP |
| Database   | MySQL |
| Hosting    | Local: XAMPP / Deployment: 000webhost or InfinityFree |

---

## Screenshots / Demo



---

## Getting Started

### 1. Clone the repository
```bash
git clone https://github.com/yourusername/artist-portfolio-commissions.git
cd artist-portfolio-commissions
```
-----
### 2. Backend Setup (PHP + MySQL)
#### 1. Install XAMPP and start Apache and MySQL.
#### 2. Place the backend folder artist-api inside htdocs:
```bash
C:/xampp/htdocs/artist-api
```
#### 3. Open phpMyAdmin (http://localhost/phpmyadmin) and create a new database:
```bash
CREATE DATABASE artist_portfolio;
```
#### 4. Create the required tables:
```bash
-- Artworks table
CREATE TABLE artworks (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    image_url VARCHAR(255) NOT NULL,
    category VARCHAR(100)
);

-- Commissions table
CREATE TABLE commissions (
    id INT AUTO_INCREMENT PRIMARY KEY,
    client_name VARCHAR(255) NOT NULL,
    client_email VARCHAR(255) NOT NULL,
    description TEXT NOT NULL,
    reference_image_url VARCHAR(255),
    status ENUM('pending','accepted','completed') DEFAULT 'pending',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
```
#### 5. Update db.php inside artist-api with your database credentials:
```bash
<?php
$host = "localhost";
$db = "artist_portfolio";
$user = "root";   // your MySQL username
$pass = "";       // your MySQL password

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    die("Database connection failed: " . $e->getMessage());
}
?>
```
#### 6. Test API endpoints in your browser or Postman:
```bash
http://localhost/artist-api/getArtworks.php
http://localhost/artist-api/getCommissions.php
```
-----
### 3. Frontend Setup (React + TypeScript + Tailwind)
#### 1. Navigate to the frontend folder:
```bash
cd artist-frontend
```
#### 2. Install dependencies and start the development server:
```bash
npm install
npm run dev
```
#### 3. Open the app in your browser:
```bash
http://localhost:5173
```
#### 4. Make sure the frontend fetches data from your backend endpoints:
```bash
http://localhost/artist-api/getArtworks.php
http://localhost/artist-api/addCommission.php
http://localhost/artist-api/getCommissions.php
http://localhost/artist-api/updateCommission.php
```
-----
