# Mahanagar App Testing Repo 🚀

A dedicated environment for testing, debugging, and refining API integrations between **Laravel 12** and **ERPNext (Frappe)**. This repository serves as a sandbox for Sales Order management, item synchronization, and status workflow validation.

## 🛠 Project Purpose

This repository is used to:
- Test REST API communication with `manjit.frappe.cloud`.
- Validate **Sales Order** creation and update workflows.
- Debug **DocStatus** transitions (0: Draft, 1: Submitted, 2: Cancelled).
- Prototype dynamic frontend components using Tailwind CSS and JavaScript.

## 🧰 Tech Stack

- **Backend**: Laravel 12.x (PHP 8.2+)
- **Frontend**: Blade, Tailwind CSS, JavaScript (Vanilla/Alpine.js)
- **Integration**: Frappe REST API v1
- **Environment**: Localhost / ERPNext Cloud

## 🚀 Getting Started

### 1. Prerequisites
- PHP 8.2 or higher
- Composer & NPM
- Access to an ERPNext instance (API Key & API Secret)

### 2. Installation
```bash
# Clone the repository
git clone [https://github.com/shibusharma1/mahanagar_app_testing_repo.git](https://github.com/shibusharma1/mahanagar_app_testing_repo.git)
cd mahanagar_app_testing_repo

# Install PHP dependencies
composer install

# Install and compile assets
npm install && npm run build

# Setup Environment
cp .env.example .env
php artisan key:generate
3. ERPNext Configuration
Add your credentials to the .env file:

Code snippet
ERPNEXT_BASE_URL=[https://manjit.frappe.cloud](https://manjit.frappe.cloud)
ERPNEXT_API_KEY=your_generated_key
ERPNEXT_API_SECRET=your_generated_secret
📋 Features Tested
🔹 Sales Order Management
[x] Dynamic Item Table (Add/Remove rows via JS).

[x] Real-time docstatus mapping.

[x] Link field validation (Company, Warehouse, Customer).

[x] Error handling for Frappe LinkValidationError.

🔹 Integration Logic
DocStatus 0: Standard Save (Draft).

DocStatus 1: Final Submission (Hard-locks the document in ERP).

DocStatus 2: Cancellation of existing orders.

🛡 Security & Testing
When testing API calls:

Use the local.INFO logs to inspect raw JSON payloads sent to ERPNext.

Ensure the Company and Warehouse names match your ERP instance exactly to avoid LinkValidationError.

Never commit your .env file with real API Secrets.

🤝 Contributing
This is a testing repository. If you are part of the development team:

Create a feature branch: git checkout -b fix/api-logic.

Commit your changes: git commit -m 'Fixed status mapping'.

Push to the branch: git push origin fix/api-logic.

Open a Pull Request.

📄 License
Internal Testing Use - All Rights Reserved.
