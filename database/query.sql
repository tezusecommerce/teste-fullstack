--db: mariaDB
--server_name: madrejoy

CREATE TABLE `madrejoy`.`postagens` ( 
    `id_postagem` INT NOT NULL PRIMARY KEY AUTO_INCREMENT
    , `tx_titulo` TEXT NOT NULL 
    , `tx_mensagem` TEXT NOT NULL 
    , `url_imagem` TEXT NOT NULL
) ENGINE=MyISAM;

insert into postagens values ('1'
                             , 'Post 1'
                             , 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut porttitor est nibh, tincidunt placerat enim fringilla non. Nam massa tellus, molestie vel euismod a, tempus ac ipsum duis fringilla ut neque.'
                             , 'https://i.ytimg.com/vi/VwbSxxm6skM/maxresdefault.jpg');

insert into postagens values ('2'
                             , 'Post 2'
                             , 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut porttitor est nibh, tincidunt placerat enim fringilla non. Nam massa tellus, molestie vel euismod a, tempus ac ipsum duis fringilla ut neque.'
                             , 'https://i.ytimg.com/vi/VwbSxxm6skM/maxresdefault.jpg');

insert into postagens values ('3'
                             , 'Post 3'
                             , 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut porttitor est nibh, tincidunt placerat enim fringilla non. Nam massa tellus, molestie vel euismod a, tempus ac ipsum duis fringilla ut neque.'
                             , 'https://i.ytimg.com/vi/VwbSxxm6skM/maxresdefault.jpg');

insert into postagens values ('4'
                             , 'Post 4'
                             , 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut porttitor est nibh, tincidunt placerat enim fringilla non. Nam massa tellus, molestie vel euismod a, tempus ac ipsum duis fringilla ut neque.'
                             , 'https://i.ytimg.com/vi/VwbSxxm6skM/maxresdefault.jpg');