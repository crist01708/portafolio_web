CREATE TABLE biografia(
 id INT AUTO_INCREMENT PRIMARY KEY,
 nombre VARCHAR(100),
 descripcion TEXT,
 foto VARCHAR(255)
);
CREATE TABLE habilidades(
 id INT AUTO_INCREMENT PRIMARY KEY,
 nombre VARCHAR(50),
 porcentaje INT
);
CREATE TABLE proyectos(
 id INT AUTO_INCREMENT PRIMARY KEY,
 titulo VARCHAR(100),
 descripcion TEXT,
 imagen VARCHAR(255),
 github VARCHAR(255),
 demo VARCHAR(255)
);
CREATE TABLE tecnologias(
 id INT AUTO_INCREMENT PRIMARY KEY,
 nombre VARCHAR(50),
 icono VARCHAR(255),
 nivel INT
);