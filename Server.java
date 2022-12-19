package projetWS;

import jakarta.xml.ws.Endpoint;

public class Server {

	public static void main(String[] args) {
	// TODO Auto-generated method stub
	Endpoint.publish("http://localhost:9191/", new BanqueService());
	System.out.println("Web service est bien deployé sur http://localhost:9191/");
	}

}
