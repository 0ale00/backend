INSERT INTO users (name, surname, email, user, password, creation_date) VALUES ("Mario", "Rossi", "admin@admin.it", "admin", "admin", NOW());

INSERT INTO costumers (name, surname, email, society, phone, address_id, user, password, creation_date) VALUES ("Federico", "Verdi", "guest1@guest.it", "society1", "3772711234", 1, "guest1", "guest1", NOW()); 

INSERT INTO costumers (name, surname, email, society, phone, address_id, user, password, creation_date) VALUES ("Mario", "Bianchi", "guest2@guest.it", "society2", "3772733334", 2, "guest2", "guest2", NOW()); 

INSERT INTO costumers (name, surname, email, society, phone, address_id, user, password, creation_date) VALUES ("Patrizia", "Rossi", "guest3@guest.it", "society3", "36672733334", 3, "guest3", "guest3", NOW());

INSERT INTO categories (name,description) VALUES ("UTENSILI","tutto per il bricolage");

INSERT INTO products (name,description,price,quantity,category_id,creation_date) VALUES ("martello","per piantare chiodi","3.99",5,2,NOW());

//inseriamo prodotti
 insert into products (name, description, price, quantity,category_id,creation_date) VALUE ("rastrello", "per raccogliere le foglie","7.49",3,3,NOW()); 
 insert into products (name, description, price, quantity,category_id,creation_date) VALUE ("laptop", "computer con UBUNTU","299.49",7,4,NOW());


  insert into products (name, description, price, quantity,category_id,creation_date) VALUE ("forbice potatura", "forbice da giardino","8.90",9,3,NOW());

  insert into products (name, description, price, quantity,category_id,creation_date) VALUE ("carriola", "carriola per agricoltura","59.90",5,3,NOW());

   insert into products (name, description, price, quantity,category_id,creation_date) VALUE ("tavoletta grafica", "Tavoletta grafica con schermo touch","149.50",3,4,NOW());

    insert into products (name, description, price, quantity,category_id,creation_date) VALUE ("scopa elettrica", "Scopa Elettrica Ricaricabile 2in1","70.00",7,4,NOW());


      insert into products (name, description, price, quantity,category_id,creation_date) VALUE ("trapano", "trapano avvitatore","34.99",5,2,NOW());



//inseriamo ordini
      insert into orders (order_num, costumer_id, creation_date) VALUES ("FAT-1",1,NOW());

insert into order_details (product_id, order_id, quantity, actual_single_price, creation_date) VALUES (9,1,1,"65.9",NOW());

insert into order_details (product_id, order_id, quantity, actual_single_price, creation_date) VALUES (4,1,2,"7.49",NOW());

insert into order_details (product_id, order_id, quantity, actual_single_price, creation_date) VALUES (7,1,3,"66",NOW());

TODO //creare una vista per ordini con dettagli e totale

DATE_FORMAT('2009-10-04 22:23:00', '%W %M %Y');

CREATE VIEW ordini_clienti AS 
SELECT orders.order_num as "NUM.ORD", orders.creation_date AS "DATA", costumers.name as "NOME", costumers.surname As "COGNOME", products.name AS "PRODOTTO", order_details.quantity as "QTA", order_details.actual_single_price AS "PREZZO"
 FROM orders INNER JOIN costumers ON costumers.id = orders.costumer_id 
 LEFT JOIN order_details ON order_details.order_id = orders.id 
 LEFT JOIN products ON order_details.product_id = products.id;





     

