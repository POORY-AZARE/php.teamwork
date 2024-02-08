# table 1 poorya zare janakbari tabale name : TestDriveBookings

```sql

CREATE TABLE `TestDriveBookings` (
  `BookingID` int NOT NULL,
  `FirstName` varchar(50) NOT NULL,
  `LastName` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `PhoneNumber` varchar(50) NOT NULL,
  `VehicleModel` varchar(50) NOT NULL,
  `Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

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
  DateSubmitted DATE NOT NULL
  
  
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



