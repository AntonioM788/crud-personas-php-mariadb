CREATE DATABASE libreria;

USE libreria;
CREATE TABLE libro (
    id INT AUTO_INCREMENT PRIMARY KEY,
    titulo VARCHAR(255) NOT NULL,
    autor VARCHAR(255) NOT NULL,
    descripcion TEXT,
    editorial TEXT,
    precio DECIMAL(10, 2) NOT NULL,
    stock INT NOT NULL
    
);

INSERT INTO libro (titulo, autor, descripcion, editorial, precio, stock) VALUES
('El Capitán Alatriste', 'Arturo Perez Reverte', 'La novela más exitosa de Arturo Perez Reverte', 'deBolsillo', 19.99, 65),
('Señor de los Anillos', 'Tolkien', 'La novela fantástica más famosa de la historia con elfos, enanos, hombres, orcos y magos','minotauro', 29.99, 45),
('El codigo da Dinci', 'Dan Brown', 'La novela más famosa de misterio y religión de los últimos tiempos','booket', 15.99, 12),
('Psicomagia', 'Alejandro Jodorowsky','Una terapia alternativa basada en el acto creativo y performático para curar todos los traumas de los pacientes','debolsillo', 9.99, 23),
('Memorias de un sabelotodo', 'John Waters', 'Las ocurrencias del director de cine más irreverte del mundo','Caja Negra', 15.99, 16),
('Ese joven monstruo', 'Charlie Fox', 'es un libro sobre jóvenes creadores, de Rimbaud a Harmony Korine, de Michael Jackson a Rainer Werner Fassbinder, que desafiaron las normas de su época.','Alpha Decay', 17.95, 2);

