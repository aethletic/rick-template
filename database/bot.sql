CREATE TABLE "users" (
	"id"	INTEGER PRIMARY KEY AUTOINCREMENT,
	"user_id"	INTEGER,
	"full_name"	TEXT,
	"first_name"	TEXT,
	"last_name"	TEXT,
	"username"	TEXT,
	"lang"	TEXT,
	"reg_date"	INTEGER,
	"last_message_date"	INTEGER,
	"banned"	INTEGER
);