## taqeem-wishlist

## Installation

1. Install [docker](https://docs.docker.com/engine/installation/) and [docker-compose](https://docs.docker.com/compose/install/) ;

2. Clone The Project and RUN `docker-compose build` at The project root path;

3. RUN `docker-compose up -d`

4. RUN `docker-compose exec app bash`

5. RUN `cd ./backend/wishlist/`

6. RUN `cp .env.example .env`

7. RUN `composer update`

8. RUN `php artisan key:generate`

9. RUN `php artisan migrate:fresh --seed`

10. RUN `php artisan test` to make sure items listing working fine.

## usage

1. open URL `localhost:3000/items` to Show the list of items at the system.
2. use email : `test@wishlist.com` , Password: `123456789` at login API Request to get brear token to use it at the rest of postman collection.
3. or you can signup

## Contributing

Contributions are welcome!
Leave an issue on Github, or create a Pull Request.

## Licence

This work is under [MIT](LICENCE) licence.
