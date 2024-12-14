# Laravel 11 Project

## Overview
This project is built using **Laravel 11** and requires **PHP 8.3.9** to run. It provides robust features and APIs to serve as a backend for web and mobile applications.

---

## Requirements

- PHP >= 8.3.9
- Composer
- MySQL
- A web server like Apache or Nginx

---

## Installation

1. **Clone the Repository**:
   ```bash
   git clone <repository-url>
   cd <repository-folder>
   ```

2. **Install PHP Dependencies**:
   ```bash
   composer install
   ```

3. **Install Frontend Dependencies**:
   ```bash
   npm install && npm run dev
   ```

4. **Environment Setup**:
   - Copy the `.env.example` file to `.env`:
     ```bash
     cp .env.example .env
     ```
   - Update the `.env` file with your database credentials and other configurations:
     ```env
     DB_CONNECTION=mysql
     DB_HOST=127.0.0.1
     DB_PORT=3306
     DB_DATABASE=your_database_name
     DB_USERNAME=your_database_user
     DB_PASSWORD=your_database_password
     ```

5. **Generate Application Key**:
   ```bash
   php artisan key:generate
   ```

6. **Run Database Migrations**:
   ```bash
   php artisan migrate
   ```



8. **Start the Local Development Server**:
   ```bash
   php artisan serve
   ```
   The application will be available at `http://127.0.0.1:8000`.

---

## API Usage

### Base URL
For local development:
```
http://127.0.0.1:8000/api
```

### Example API Endpoints

#### 1. **Add New User**
- **Endpoint**: `POST /register`
-  **Request**:
  ```bash
  curl -X POST http://127.0.0.1:8000/api/register
  -H "Content-Type: application/json" \
  -d '{
      "name": "Alice Johnson",
      "email": "alice.johnson@example.com",
      "password": "securepassword"
      "roles[]": "admin"
      "roles[]": "hr"
  }'
  ```

- **Response**:

      {
        "success": true,
        "statusCode": 201,
        "message": "User has been registered successfully.",
        "data": {
            "name": "rahi role check3",
            "email": "rahirole3@email.com",
            "updated_at": "2024-12-14T15:58:05.000000Z",
            "created_at": "2024-12-14T15:58:05.000000Z",
            "id": 14,
            "token": {
                "token_type": "Bearer",
                "expires_in": 1296000,
                "access_token": "eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiI5ZGI3MmEyNC00ODA5LTQ2MzItOTlmNS02NjI5MzUzMmQ1MDciLCJqdGkiOiI1OGYwYTA3ZGNkM2I4YWFjYmMzYTJkM2Y0ZWZjNTRlM2JkZjIzYzdkZjZlYzUyMzg4Nzg1YjAxMzhkM2Q0YmEzOGQyODczM2ViMmI0MDQ2NSIsImlhdCI6MTczNDE5MTg5NC4wMjI2NDIsIm5iZiI6MTczNDE5MTg5NC4wMjI2NDUsImV4cCI6MTczNTQ4Nzg5My4xMzc4NDQsInN1YiI6IjE0Iiwic2NvcGVzIjpbXX0.dT97gksF4-h59807Koelp-FYsb8Ni2Ec1Potg0dJmX54xrl0skM23i0CqjwSq3aJpKvKIOpESgXyzNHRFjNSyy89G_XhBNXZ9SrU_vKv6PhIJiyYnBaxpeNSU13Qcqyw3UBPie8qZ5AO6crN4m7zgW8ks54xh-Ldk9OWwO52gkjiBamum43jiEHFM-C5L9HFWo18Oy3O5Ux0Q43jmGrK5U0GS6xmC5_fCXC3brRAXGuQPd6xYIxmvtZmrJIZ7XFrhDbOVdAXz-rfz9cBl-ZlZwcQSKGEFslQ3KTms1H6QJYAShmX_Yjpv8tNFI3yMSutMXML8KELqmdg4J1ZM77nwiTZ5cDHxXkSmJem-8qpiB7l8y37XJeX-8TGc1HyER68AK84SCiE3gig-I9vVmDvwooUdz9nARytm8udu8nrBGYfhy8f42l-xMOLVBUXl6QrJHSzSEm41SKTKvedv2UdaexavUCORwDXvkcYKFeTGri6bm4BYpJnRN4bgNhoXDEPx2SRP7MZsWg6VkrgDyC7-0Ui17xjJVMHppQR-U0DBtKo9vzRAocqgnROt56qLBB4o63cVuBQfp8pUOWv2RMk86S7UtaZCXja0OX9pfmbzCP-P52Z-4CtzOhGzpy56ncu7mHc4vPeTryZ1bBXPiDklL2UUk8NsjVluQIYDXFA2SY",
                "refresh_token": "def5020008a8e7250d2ba5acfc7f930ec5834b517158970b8711579c3effd9e8eeeb417390c6a4530d7bd79b1b9c27c95f5d380c2ee6e39504fd8914b0ad79b5fd497e8ae5e3a9d2f0aae0105bca4366f28d3c5afaf1da5bc032d03c3530c169068b6f95545c748a6944048b89841a3897feff21664b6772f086233936c37c04b6a5e4c4165dff80758569e3782c38666b6d7d8e2e10d4cb7933ee95271c28af118b16ddc161db72f4bc8baad9efe9cf8a67d3d47762e0f3801c3aa94dca20b44b02a5b44018d79957d741e361778c471bb05b94a8334871b0c1dd92285dfdb7540f1082716fe45a52729654e047c1d0c2a4b97fbca5ccf52aa4ccf4c09ca23e3b826f51fe8284c561eb0e5a2f16da2a4b6991d60bc5e782beb70ca1fc0f2d442d13b5722920492dca324f144b655606874e759d93d8ce04c5ad01208415e22e6fdfae67a9bc5aef004be2644ee57e666804b12217b0e02592dfc734b40a66acb8184c64b729e7956a411059f2f922d23686bce69267874d1807af23d64869bd1726462ce6"
            }
        }
    }


#### 2. **Create New Role**
- **Endpoint**: `POST /roles`
-  **Request**:
  ```bash
  curl -X POST http://127.0.0.1:8000/api/roles
  -H "Content-Type: application/json" \
  -d '{
      "name": "admin",
      "guard_name": "api"
  }'
  ```

- **Response**:

      {"guard_name":"api","name":"admin","updated_at":"2024-12-14T16:17:33.000000Z","created_at":"2024-12-14T16:17:33.000000Z","id":4}

#### 3. **Create New Permission**
- **Endpoint**: `POST/ permission`
- **Request**:

             
    curl -X POST http://127.0.0.1:8000/api/permission
      -H "Content-Type: application/json" \
     -d '{
          "name": "product.store",
          "guard_name": "api"
      }'

- **Response**:

     {"guard_name":"api","name":"admin","updated_at":"2024-12-14T16:17:33.000000Z","created_at":"2024-12-14T16:17:33.000000Z","id":4}

#### 4. **Assign Permission To Role**
- **Endpoint**: `POST assign-permission`
- **Request**:
  ```bash
  curl -X DELETE http://127.0.0.1:8000/api/assign-permission
  d- '{
  "role_id": "1"
  "permissions[]: "product.store"
  }
  '
  ```
- **Response**:
  ```
  

    {
        "success": true,
        "statusCode": 200,
        "message": "Permissions have been assigned to the role successfully.",
        "data": [
            {
                "id": 1,
                "name": "product.edit",
                "guard_name": "api",
                "created_at": "2024-12-13T19:04:46.000000Z",
                "updated_at": "2024-12-13T19:04:46.000000Z",
                "pivot": {
                    "role_id": 2,
                    "permission_id": 1
                }
            },
            {
                "id": 2,
                "name": "product.store",
                "guard_name": "api",
                "created_at": "2024-12-13T19:05:07.000000Z",
                "updated_at": "2024-12-13T19:05:07.000000Z",
                "pivot": {
                    "role_id": 2,
                    "permission_id": 2
                }
            }
        ]
    }

  ```

#### 5. **logout**
- **Endpoint**: `POST logout`

#### 6. **Check user with all roles and permissions**
- **Endpoint**: `GET me`

#### 7. **To check the middleware, user who have the product.store permission he can use this route**
- **Endpoint**: `POST product-store`


