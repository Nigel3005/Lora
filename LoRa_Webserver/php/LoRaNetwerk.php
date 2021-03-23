<!DOCTYPE html>


<html>
    <head>
        <title>LoRa Webserver</title>
        <link rel="stylesheet" href="../css/LoRa.css">
    </head>
    <body>
        <nav>
            <p>LoRa Webserver</p>
            <ul>
                <li><a href="LoRa.php">Home</a>
                    <ul>
                        <li><a href="LoRaNetwerk.php">LoRa Netwerk</a></li>
                        <li><a href="Contact.php">Contact</a></li>
                    </ul>
                </li>
                <li><a class="active" href="LoRaNetwerk.php">LoRa Netwerk</a>
                    <ul>
                        <li><a href="LoRaNetwerk.php">Definition</a></li>
                        <li><a href="LoRaNetwerk.php#Features">Features</a></li>
                        <li><a href="LoRaNetwerk.php#LoRaWan">LoRaWan</a></li>
                    </ul>
                </li>
                <li><a href="Contact.php">Contact</a>
                </li>
            </ul>
        </nav>
        <main><br><br><br><br>
            <div id="LoRaNetwerk">
                <h2>Definition</h2>
            </div>
            <h4>LoRa (Long Range) is a proprietary low-power wide-area network modulation technique.[1] 
            It is based on spread spectrum modulation techniques derived from chirp spread spectrum (CSS) technology.[2] 
            It was developed by Cycleo of Grenoble, France and acquired by Semtech, the founding member of the LoRa Alliance and it is patented.[3]</h4>
            <div id="Features">
                <h2>Features</h2>
            </div>
            <h4>LoRa uses license-free sub-gigahertz radio frequency bands like 433 MHz, 868 MHz (Europe), 
            915 MHz (Australia and North America), 865 MHz to 867 MHz (India) and 923 MHz (Asia). 
            LoRa enables long-range transmissions with low power consumption.[4] 
            The technology covers the physical layer, while other technologies and protocols such as LoRaWAN (Long Range Wide Area Network) cover the upper layers. 
            It can achieve data rates between 0.3 kbit/s and 27 kbit/s depending upon the spreading factor.[5]
            LoRa devices have geolocation capabilities used for trilaterating positions of devices via timestamps from gateways.[6]</h4>
            <div id="LoRaWan">
                <h2>LoRaWan</h2>
            </div>
            <h4>
            Since LoRa defines the lower physical layer, the upper networking layers were lacking. 
            LoRaWAN is one of several protocols that were developed to define the upper layers of the network. 
            LoRaWAN is a cloud-based medium access control (MAC) layer protocol but acts mainly as a network layer protocol for managing communication between LPWAN gateways and end-node devices as a routing protocol, maintained by the LoRa Alliance.
            LoRaWAN defines the communication protocol and system architecture for the network, while the LoRa physical layer enables the long-range communication link. 
            LoRaWAN is also responsible for managing the communication frequencies, data rate, and power for all devices.[10] 
            Devices in the network are asynchronous and transmit when they have data available to send. 
            Data transmitted by an end-node device is received by multiple gateways, which forward the data packets to a centralized network server.[11] 
            Data is then forwarded to application servers.[12] 
            The technology shows high reliability for the moderate load, however, it has some performance issues related to sending acknowledgements.[13]
            </h4>
        </main>
    </body>
    <footer>    
        Copyright © - Nigel de Werk
    </footer>
</html>
