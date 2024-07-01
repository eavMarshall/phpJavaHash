# Use the official OpenJDK 8 image as the base image
FROM openjdk:8-jdk

# Update and install dependencies
RUN apt-get update && apt-get install -y \
    wget \
    gnupg2 \
    software-properties-common \
    apt-transport-https \
    lsb-release \
    ca-certificates \
    curl \
    unzip \
    git \
    php7.4 \
    php7.4-cli \
    php7.4-fpm \
    php7.4-mysql \
    php7.4-dom \
    php7.4-mbstring

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Set Composer to allow super user
ENV COMPOSER_ALLOW_SUPERUSER=1

# Install PHPUnit (specifying version 9.6)
RUN composer global require phpunit/phpunit:^9.6

# Add Composer's global bin directory to the PATH
ENV PATH="/root/.config/composer/vendor/bin:${PATH}"

# Verify PHPUnit installation
RUN phpunit --version || echo "PHPUnit not found in PATH"

# Copy the Java source files and build them
COPY src /usr/src/myapp/src
RUN javac /usr/src/myapp/src/*.java

# Copy your PHP application code and tests
COPY . /usr/src/myapp

RUN composer install --working-dir=/usr/src/myapp

# Set the working directory
WORKDIR /usr/src/myapp

# Command to keep the container running (optional)
CMD tail -f /dev/null