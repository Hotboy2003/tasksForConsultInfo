SELECT u.firstName, u.lastName, c.city
FROM user u
LEFT JOIN city c ON u.city = c.id;

// LEFT JOIN использован чтобы если не указан город, то был null напротив пользователя