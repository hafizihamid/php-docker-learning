# Use latest PHP CLI image
FROM php:8.2-cli

# Set working directory
WORKDIR /app

# Copy current folder into container
COPY . .

# Set default command (you can override it)
CMD ["php", "01-basics/index.php"]
