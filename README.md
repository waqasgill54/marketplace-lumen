
# Market Place (Buy Orders)

The application that will be built here will use Laravel lumen for backend logic implementation and Vue.js to handle all frontend interactivity.It's a simple market place project in which It's a Laravel lumen test project built with a repository design pattern, it's basically a backend API project which describes the display, deletes updates, and adds orders.

# Getting started

## Installation

Clone the repository

    git clone https://github.com/waqasgill54/marketplace-lumen.git

Switch to the repo folder

    cd marketplace-lumen

Install all the dependencies using composer

    composer install    

Copy the example env file and make the required configuration changes in the .env file

    cp .env.example .env

Generate app key

    https://BASE_URL/key
    URL print key copy string and paste in .env file APP_KEY Variable   

**Make sure you set the correct database connection information before running the migrations** [Environment variables](#environment-variables)

    Modify DB_* value in .env with your database config.
    

Run the database migrations (**Set the database connection in .env before migrating**)

    php artisan migrate

 



## API Reference

#### Get all orders

```http
  GET /api/orders
```
#### Get all data package types

```http
  GET /api/data_package_types
```

#### add new order

```http
  GET /api/order
```

| Parameter | Type     | Description                       |
| :-------- | :------- | :-------------------------------- |
| `name`      | `string` | **Required**. |
| `max_bid_price`      | `numbers` | **Required**. |
| `data_package_type_id`      | `int` | **Required**. |

#### view order by id

```http
  GET /api/order/${id}
```
#### update order by id

```http
  GET /api/order/${id}
```

| Parameter | Type     | Description                       |
| :-------- | :------- | :-------------------------------- |
| `name`      | `string` | **Required**. |
| `max_bid_price`      | `numbers` | **Required**. |
| `data_package_type_id`      | `int` | **Required**. |

#### Delete order by id

```http
  GET /api/order/${id}
```
## Linked Repositories

- [@marketplace-backend](https://github.com/waqasgill54/marketplace-lumen.git)
- [@marketplace-frontend](https://github.com/waqasgill54/marketplace-vue.git)

