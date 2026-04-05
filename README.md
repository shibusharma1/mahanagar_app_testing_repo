# Biratnagar Metropolitan Scholarship System (Testing Repo)

This repository contains the testing and development codebase for the **Biratnagar Metropolitan City Scholarship Management System**.

The system is designed to manage scholarship application processes online, allowing students to apply digitally and enabling the municipality to review, verify, and manage scholarship records efficiently.

🔗 Live System: https://scholarship.biratnagarmun.gov.np/

---

## 📌 Project Overview

The Scholarship System helps in:

- Online scholarship application submission
- Applicant information management
- Document upload and verification
- Admin review and approval workflow
- Scholarship status tracking
- Municipality-level scholarship record management

This repository is mainly used for testing new updates and improvements before deploying to the production system.

---

## 🚀 Features

### 👨‍🎓 Applicant Side
- User registration & login
- Scholarship application form submission
- Upload required documents (citizenship, marksheet, etc.)
- View application status
- Update profile information

### 🏛️ Admin/Municipality Side
- Admin login dashboard
- View and manage all scholarship applications
- Filter/search applications
- Verify uploaded documents
- Approvals and rejection system
- Export/reporting support (if implemented)

---

## 🛠️ Tech Stack

- **Backend:** PHP / Laravel (if Laravel is used)
- **Frontend:** Blade / HTML / CSS / JavaScript
- **Database:** MySQL
- **Server:** Apache / Nginx
- **Deployment:** Web hosting / VPS

---

## ⚙️ Installation & Setup

### 1️⃣ Clone the repository

```bash
git clone https://github.com/shibusharma1/mahanagar_app_testing_repo.git
cd mahanagar_app_testing_repo
2️⃣ Install dependencies
composer install
3️⃣ Setup environment file
cp .env.example .env
php artisan key:generate
4️⃣ Configure database

Update .env file:

DB_DATABASE=your_database_name
DB_USERNAME=your_username
DB_PASSWORD=your_password
5️⃣ Run migrations
php artisan migrate
6️⃣ Start the development server
php artisan serve

Now open:

http://127.0.0.1:8000
🔐 Important Notes
Do not upload .env file to GitHub.
Ensure proper file permissions for storage and cache:
php artisan storage:link
chmod -R 775 storage bootstrap/cache
📂 Folder Structure (Basic)
app/ → Application logic
resources/views/ → Frontend UI pages
routes/web.php → Web routes
database/ → Migrations and seeders
public/ → Public assets
👨‍💻 Developer / Maintainer
Developer: Shibu Sharma
GitHub: https://github.com/shibusharma1
📄 License

This project is developed for Biratnagar Metropolitan City scholarship system usage.
Unauthorized distribution or commercial use is not permitted.
