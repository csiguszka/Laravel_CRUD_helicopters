CREATE TABLE IF NOT EXISTS helicopters (
  id INTEGER PRIMARY KEY AUTOINCREMENT,
  name TEXT,
  manufacturer TEXT,
  type TEXT,
  passengerCapacity INTEGER,
  maxSpeedKmh INTEGER
);

INSERT INTO helicopters (name, manufacturer, type, passengerCapacity, maxSpeedKmh)
VALUES
('Eurocopter AS350', 'Airbus Helicopters', 'Light Utility', 6, 287),
('Sikorsky UH-60 Black Hawk', 'Sikorsky Aircraft', 'Military', 11, 294),
('Robinson R44', 'Robinson Helicopter Company', 'Private', 4, 240),
('AgustaWestland AW139', 'Leonardo S.p.A.', 'Medium Utility', 15, 310),
('Bell 206', 'Bell Helicopter', 'Utility', 5, 240);
