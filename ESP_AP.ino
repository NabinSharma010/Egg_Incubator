#include <ETH.h>
#include <WiFi.h>
#include <WiFiAP.h>
#include <WiFiClient.h>
#include <WiFiGeneric.h>
#include <WiFiMulti.h>
#include <WiFiScan.h>
#include <WiFiServer.h>
#include <WiFiSTA.h>
#include <WiFiType.h>
#include <WiFiUdp.h>
#include <HTTPClient.h>
#include <string.h>
#include <DHT.h>
#define dhtt DHT22
#define dhtp 16
DHT dht(dhtp,dhtt);
HTTPClient http;
 
const char *ssid = "AndroidAP"; 
const char *password = "88888888";
const char *host = "http://localhost/helloworld/"; 

char mystr[15];
String humidity;
String temp;
String postData;
  
void setup() {
  Serial.begin(9600);
  dht.begin();
  WiFi.begin(ssid, password);
  while (WiFi.status() != WL_CONNECTED) {
    delay(500);
//    Serial.print(".");
  }
//  Serial.println("");
//  Serial.println("WiFi connected.");
//  Serial.println("IP address: ");
//  Serial.println(WiFi.localIP());
}
void loop() {
    float humid = dht.readHumidity();
    float temp = dht.readTemperature();
    String postData = "humid=" + String(humid) + "&temp="+ String(temp);
    Serial.println(postData);
    http.begin("http://192.168.43.249/helloworld/getdata.php");              
    http.addHeader("Content-Type", "application/x-www-form-urlencoded");  
    int httpCode = http.POST(postData); 
    String payload = http.getString();
    Serial.println(httpCode); 
    Serial.println(payload); 
    http.end(); 
    delay(1000);
}
