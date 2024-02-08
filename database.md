# table 1 poorya zare janakbari tabale name : TestDriveBookings

```sql

CREATE TABLE TestDrives (
  UserID INT PRIMARY KEY,
  CarID INT,
  FirstName VARCHAR(50) NOT NULL,
  LastName VARCHAR(50) NOT NULL,
  Email VARCHAR(100) NOT NULL,
  ScheduledDate DATE NOT NULL,
  Status VARCHAR(50) NOT NULL,
  FOREIGN KEY (CarID) REFERENCES Cars(CarID)

);

```

# table 3 charity kabutbei tabale name : feedback

```sql
CREATE TABLE Feedback (
  FeedbackID INT AUTO_INCREMENT PRIMARY KEY,
  CarID INT,
  UserID INT,
  Title VARCHAR(100) NOT NULL,
  Comment TEXT NOT NULL,
  Rating INT,
  DateSubmitted DATE NOT NULL,
  FOREIGN KEY (CarID) REFERENCES Cars(CarID),
  FOREIGN KEY (UserID) REFERENCES TestDrives(UserID)
);

```

# table 4 Amin Hamidi Younessi tabale name : Advance search

```sql
CREATE TABLE CarFeatures (
  CarID INT AUTO_INCREMENT PRIMARY KEY,
  Make VARCHAR(50) NOT NULL,
  Model VARCHAR(50) NOT NULL,
  Year INT NOT NULL,
  Price DECIMAL(10,2) NOT NULL,
  Type VARCHAR(50) NOT NULL
);


```

# table 2 Nastaran Dehnavi tabale name : Top-selling_cars

```sql

CREATE TABLE TopSellingCars (
  TopSellingID INT AUTO_INCREMENT PRIMARY KEY,
  CarID INT,
  Month VARCHAR(20) NOT NULL,
  Year INT NOT NULL,
  UnitsSold INT NOT NULL,
  FOREIGN KEY (CarID) REFERENCES Cars(CarID)
);

```
