# table 1 poorya zare janakbari tabale name : TestDriveBookings

```sql

CREATE TABLE TestDrives (
  TestDriveID INT AUTO_INCREMENT PRIMARY KEY,
  CarID INT,
  ScheduledDate DATE NOT NULL,
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

# table 2 Nastaran Dehnavi tabale name : orders

```sql

CREATE TABLE Orders (
  OrderID INT AUTO_INCREMENT PRIMARY KEY,
  CarID INT,
  FirstName VARCHAR(50) NOT NULL,
  LastName VARCHAR(50) NOT NULL,
  EmailAddress VARCHAR(100) NOT NULL,
  OrderDate DATE NOT NULL,
  Quantity INT NOT NULL,
  TotalPrice DECIMAL(10,2) NOT NULL,
  FOREIGN KEY (CarID) REFERENCES Cars(CarID)
);

```
