# SmartGarden

**SmartGarden** is an IoT-based smart garden monitoring and control system. It integrates hardware components (Arduino + ESP8266 and sensors) with a web dashboard and Android mobile app for real-time monitoring and remote control of your garden environment.

## Table of Contents

- [Features](#features)
- [System Architecture](#system-architecture)
- [Hardware Components](#hardware-components)
- [Software Components](#software-components)
- [Setup and Installation](#setup-and-installation)
  - [Hardware Setup](#hardware-setup)
  - [Backend & Dashboard Setup](#backend--dashboard-setup)
  - [Android App Setup](#android-app-setup)
- [Usage](#usage)
- [Contributing](#contributing)
- [License](#license)
- [Acknowledgements](#acknowledgements)

## Features

- **Real-time Monitoring**: Automatically records humidity and temperature values using sensors.
- **Web Dashboard**: Visualize live data, historical trends, and control connected garden devices.
- **Android App**: Provides on-the-go monitoring and control of your garden.
- **Remote Control**: Manage irrigation, lighting, or other connected devices remotely via the dashboard or app.
- **Scalable & Extensible**: Easily add additional sensors or control modules to your setup.

## System Architecture

The system consists of three main layers:

1. **Hardware/Firmware**:
   - **Arduino + ESP8266**: The microcontroller (Arduino) reads sensor data and communicates over WiFi using the ESP8266 module.
   - **Sensors**: A humidity and temperature sensor (such as the DHT11 or DHT22) measures the environmental parameters.
   
2. **Backend & Web Dashboard**:
   - A backend server (developed in your preferred language/framework – such as Node.js, Python, or Go) receives sensor data pushed via HTTP or MQTT.
   - A web dashboard then visualizes the data and provides control interfaces for the garden devices.

3. **Android Mobile App**:
   - A dedicated mobile application that connects to the backend, allowing users to monitor data and control the garden in real time.

A simplified data flow diagram:

