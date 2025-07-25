# Base image
FROM ubuntu:22.04

LABEL maintainer="yourname@example.com"
ENV DEBIAN_FRONTEND=noninteractive

# Install SSH and basic tools
RUN apt-get update && apt-get install -y \
    openssh-server \
    sudo \
    vim \
    curl \
    net-tools \
    iputils-ping \
    && apt-get clean

# Create SSH directory
RUN mkdir /var/run/sshd

# Set up user
RUN useradd -ms /bin/bash dockeruser && \
    echo 'dockeruser:dockerpass' | chpasswd && \
    usermod -aG sudo dockeruser

# Allow password-based SSH login
RUN sed -i 's/#PasswordAuthentication yes/PasswordAuthentication yes/' /etc/ssh/sshd_config && \
    sed -i 's/PermitRootLogin prohibit-password/PermitRootLogin yes/' /etc/ssh/sshd_config

# Expose SSH port
EXPOSE 22

# Start SSH when container runs
CMD ["/usr/sbin/sshd", "-D"]
