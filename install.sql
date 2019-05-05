CREATE TABLE `users` (
                         `user_id` INT NOT NULL AUTO_INCREMENT,
                         `username` VARCHAR(30) NOT NULL UNIQUE,
                         `password` VARCHAR(512) NOT NULL,
                         `isAdmin` BOOLEAN NOT NULL DEFAULT '0',
                         `phone` VARCHAR(30),
                         `email` VARCHAR(30) NOT NULL,
                         `address` VARCHAR(30),
                         `birthday` VARCHAR(30),
                         PRIMARY KEY (`user_id`)
);

CREATE TABLE `orders` (
                          `order_id` INT NOT NULL AUTO_INCREMENT,
                          `cart_id` INT NOT NULL UNIQUE,
                          `user_id` INT NOT NULL,
                          `order_time` TIMESTAMP NOT NULL,
                          `summ` FLOAT NOT NULL,
                          PRIMARY KEY (`order_id`)
);

CREATE TABLE `products` (
                            `product_id` INT NOT NULL AUTO_INCREMENT,
                            `product_name` varchar(255) NOT NULL UNIQUE,
                            `price` FLOAT NOT NULL,
                            `description` TEXT NOT NULL,
                            `picture_link` TEXT NOT NULL,
                            `weight` FLOAT NOT NULL,
                            `color` INT NOT NULL,
                            `width` FLOAT NOT NULL,
                            `height` FLOAT NOT NULL,
                            `quantity` INT NOT NULL,
                            PRIMARY KEY (`product_id`)
);

CREATE TABLE `Categories` (
                              `product_id` INT NOT NULL,
                              `category_id` INT NOT NULL,
                              PRIMARY KEY (`product_id`,`category_id`)
);

CREATE TABLE `reviews` (
                           `review_id` INT NOT NULL AUTO_INCREMENT,
                           `name` VARCHAR(30) NOT NULL,
                           `rating` INT NOT NULL,
                           `review` TEXT NOT NULL,
                           `userdick` TEXT NOT NULL,
                           PRIMARY KEY (`review_id`)
);

CREATE TABLE `cart` (
                        `cart_id` INT NOT NULL AUTO_INCREMENT,
                        `product_id` INT NOT NULL,
                        `qty` INT NOT NULL,
                        `order_id` INT NOT NULL,
                        PRIMARY KEY (`cart_id`)
);

ALTER TABLE `orders` ADD CONSTRAINT `orders_fk0` FOREIGN KEY (`cart_id`) REFERENCES `cart`(`cart_id`);

ALTER TABLE `orders` ADD CONSTRAINT `orders_fk1` FOREIGN KEY (`user_id`) REFERENCES `users`(`user_id`);

ALTER TABLE `Categories` ADD CONSTRAINT `Categories_fk0` FOREIGN KEY (`product_id`) REFERENCES `products`(`product_id`);
