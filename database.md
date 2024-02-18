# table 1 poorya zare janakbari tabale name : TestDriveBookings

```sql

CREATE TABLE TestDrives (
  TestDriveID INT AUTO_INCREMENT PRIMARY KEY,
  CarID INT,
  FirstName varchar(50),
  LastName varchar(50),
  Email text NOT NULL,
  PhoneNumber varchar(50) NOT NULL,
  VehicleModel varchar(50) NOT NULL,
  Date  DATE NOT NULL,
  Status VARCHAR(50) NOT NULL,
  OrderID INT,
  FOREIGN KEY (CarID) REFERENCES Cars(CarID),
  FOREIGN KEY (OrderID) REFERENCES Orders(OrderID)
);

```

# table 3 charity kabutbei tabale name : feedback

```sql
CREATE TABLE Feedback (
  FeedbackID INT AUTO_INCREMENT PRIMARY KEY,
  CarID INT,
  OrderID INT,
  Title VARCHAR(100) NOT NULL,
  Comment TEXT NOT NULL,
  Rating INT,
  DateSubmitted DATE NOT NULL,
  FOREIGN KEY (CarID) REFERENCES Cars(CarID),
  FOREIGN KEY (OrderID) REFERENCES Orders(OrderID)
);

```

# table 4 Amin Hamidi Younessi tabale name : Cars

```sql
CREATE TABLE Cars (
  CarID INT AUTO_INCREMENT PRIMARY KEY,
  Make VARCHAR(50) NOT NULL,
  Model VARCHAR(50) NOT NULL,
  Year INT NOT NULL,
  Price DECIMAL(10,2) NOT NULL,
  Type VARCHAR(50) NOT NULL
);


```

# table 2 Nastaran Dehnavi tabale name : service

```sql
CREATE TABLE SERVICE (
    id INT AUTO_INCREMENT PRIMARY KEY,
    first_name VARCHAR(100) NOT NULL,
    last_name VARCHAR(100) NOT NULL,
    contact_number VARCHAR(20) NOT NULL,
    car_type VARCHAR(100) NOT NULL,
    email VARCHAR(255) NOT NULL
);
```

# table 5 poorya zare janakbari tabale name : newsletter_subscribers

```sql

CREATE TABLE `newsletter_subscribers` (
  id int NOT NULL,
  email varchar(255) NOT NULL,
  subscribed_on datetime DEFAULT CURRENT_TIMESTAMP
);

```
