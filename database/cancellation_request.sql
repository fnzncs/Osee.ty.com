CREATE TABLE `cancellation_requests` (
    `id` int(11) NOT NULL,
    `title` varchar(255) NOT NULL,
    `fullname` varchar(255) NOT NULL,
    `email` varchar(255) NOT NULL,
    `company_name` varchar(255) NOT NULL,
    `start_datetime` datetime NOT NULL,
    `end_datetime` datetime NOT NULL,
    `venue` varchar(255) NOT NULL,
    `reason` text NOT NULL,
    `status` varchar(50) NOT NULL
);
