package projetWS;

import java.util.Date;

public class Compte {

	int code;
	double solde;
	Date date;
	
	public Compte(int code,double sold, Date date) {
		this.solde=sold;
		this.code = code;
		this.date = date;
	}

	@Override
	public String toString() {
		return "Compte [code=" + code + ", solde=" + solde + ", date=" + date + "]";
	}

	public int getCode() {
		return code;
	}

	public void setCode(int code) {
		this.code = code;
	}

	public double getSolde() {
		return solde;
	}

	public void setSolde(double solde) {
		this.solde = solde;
	}

	public Date getDate() {
		return date;
	}

	public void setDate(Date date) {
		this.date = date;
	}
	
}
