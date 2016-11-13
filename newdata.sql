//create table admin
(
admin_id serial primary key,
admin_email text not null,
admin_pass text not null
);

/* for categories */

//create table categories(
catID serial primary key,
category text not null
);

/*for professional rating*/
//create table rating
(
ratingID serial primary key,
stars int,
comment text,
from_cusID int references customer_signup(custID),
to_proID int references professional_signup(proID),
review_date timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP 
);

/* kart is used for temporary data*/
//create table kart
(
kart_id int not null,
kart_pro_id int references professional_signup(proID)
);



/*customer_signup table is used at signup for customer to enter  there data */

//create table customer_signup
(
custID serial primary key,
first_name text not null,
last_name text not null,
email text not null,
password_txt text not null,
image text default 'image/cust_placeholder'
)

/*customer_edit table is used after signup for customer to enter  there data */

//create table customer_edit
(
custID int references customer_signup(custID),
address text not null,
city text not null,
pincode text not null,
country text not null,
phone_no text not null,
age int not null,
gender text not null

)
/*customer_order is used to track customer order, to show purchase history */

//create table customer_orders
(
orderID serial primary key,
customer_id int references customer_signup(custID),
due_amount int not null, 
invoice_no int not NULL, 
total_products int NOT NULL,
order_date timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP, 
order_status text NOT NULL, 
service text,
proid int references professional_signup(proID)
);




/*profesional_signup table is used at signup for professional to enter  there data */

//create table professional_signup
(
proID serial primary key,
first_name text not null,
last_name text not null,
email text not null,
password text not null
)


/*profesional_profile table is used after signup for professional to enter  there data */

//create table professional_profile
(
proID references professional_signup(proID),
address text not null,
city text not null,
pincode text not null,
country text not null,
phone_no text not null,
experience int not null,
gender text not null,
age int not null,
Expected_salary text not null,
qualification text,
category int references categories(catID),
photo_loc text not null,
identity_proof text not null,
address_proof text not null,
Status text,
fee int not null
)
