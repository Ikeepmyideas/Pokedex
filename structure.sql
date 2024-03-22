-- Table users
CREATE TABLE users (
    id INT PRIMARY KEY AUTO_INCREMENT,
    pseudo VARCHAR(60) NOT NULL,
    email VARCHAR(128) NOT NULL,
    password VARCHAR(128) NOT NULL,
    image VARCHAR(128)
);

-- Table Pokemons
CREATE TABLE pokemons (
    id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(128) NOT NULL,
    pv INT NOT NULL,
    attack INT NOT NULL,
    defense INT NOT NULL,
    speed INT NOT NULL,
    image VARCHAR(128),
    id_user INT,
    FOREIGN KEY (id_user) REFERENCES users(id)
);
