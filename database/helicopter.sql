CREATE TABLE IF NOT EXISTS helicopters (
  id TEXT PRIMARY KEY,
  name TEXT,
  manufacturer TEXT,
  type TEXT,
  passengerCapacity INTEGER,
  maxSpeedKmh INTEGER
);

INSERT INTO helicopters (id, name, manufacturer, type, passengerCapacity, maxSpeedKmh)
VALUES
('2', 'Eurocopter AS350', 'Airbus Helicopters', 'Light Utility', 6, 287),
('3', 'Sikorsky UH-60 Black Hawk', 'Sikorsky Aircraft', 'Military', 11, 294),
('4', 'Robinson R44', 'Robinson Helicopter Company', 'Private', 4, 240),
('5', 'AgustaWestland AW139', 'Leonardo S.p.A.', 'Medium Utility', 15, 310),
('b818', 'Bell 206', 'Bell Helicopter', 'Utility', 5, 240);
