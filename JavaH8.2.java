class Jäljend {
	public String ese;
	public String varv;
	public int hind;
	
	public Jäljend(String n, String va, int v){
		this.ese = n;
		this.varv = va;
		this.hind = v;
	}
	
    //Kuvab eseme kirjelduse
	public void kirjeldus() {
		System.out.println("Eseme kujund: "+ese+", eseme värvus: "+varv+", eseme hind "+hind+" EURi");
	}
}

class Kirjeldus {

    //Põhiprogramm
	public static void main(String[] args) {

        //Ese1
		Jäljend e1 = new Jäljend("Ringi kujuline", "Kuldne", 6969);
		e1.kirjeldus();
		
        //Ese2
		Jäljend e2 = new Jäljend("Kolmnurk", "Hõbedane", 999999);
		e2.kirjeldus();
	}
}