/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 *
 * @author niwde
 */
public class CuentaBancaria {

    //atributos
    private String nombre;
    private String cedula;
    private double saldoCuentaAhorros;
    private double saldoCuentaCorriente;
    private double saldoCDT;
    private boolean CDT;//Indica si el CDT se abre
    //método constructor

    public CuentaBancaria() {
        nombre = "Sergio Lopez";
        cedula = "50.152.468";
        saldoCuentaAhorros = 0;
        saldoCuentaCorriente = 0;
        saldoCDT = 0;
        CDT = false;

    }

    //segundo método constructor
    public CuentaBancaria(String nom, String ced) {
        this();
        nombre = nom;
        cedula = ced;

    }

    public CuentaBancaria(String nombre, String cedula, double saldoCuentaAhorros, double saldoCuentaCorriente, double saldoCDT) {
        this.nombre = nombre;
        this.cedula = cedula;
        this.saldoCuentaAhorros = saldoCuentaAhorros;
        this.saldoCuentaCorriente = saldoCuentaCorriente;
        this.saldoCDT = saldoCDT;
    }

    //Métodos generales
    //Acciones de la clase
    public double mostrarSaldoTotal() {
        double total = saldoCuentaAhorros
                + saldoCuentaCorriente
                + saldoCDT;
        return total;
    }

    //Incrementar el saldo de cuenta de ahorros
    public void incrementarSaldoAhorros(double dinero) {
        saldoCuentaAhorros += dinero;

    }

    //Incrementar el saldo de cuenta de corriente
    public void incrementarSaldoCorriente(double dinero) {
        saldoCuentaCorriente += dinero;
    }

    //Abrir el saldo de cuenta de corriente
    public void abrirSaldoCDT(double dinero) {
        saldoCDT = dinero;
        CDT = true;
    }

    //Retiro de cuenta corriente
    public boolean retiroCuentaCorriente(double dinero) {
        if (saldoCuentaCorriente >= dinero) {
            saldoCuentaCorriente -= dinero;
            return true;
        } else {
            return false;
        }
    }

    //Retiro de cuenta de ahorros
    public boolean retiroCuentaAhorros(double dinero) {
        if (saldoCuentaAhorros >= dinero) {
            saldoCuentaAhorros -= dinero;
            return true;//retiro exitoso
        } else {
            return false;//retiro fallido
        }
    }

    //Cerrar el CDT
    public void cerrarCDT() {
        saldoCuentaCorriente += saldoCDT;
        saldoCDT = 0;
        CDT = false;
    }

    //avanzar mes
    public void avanzarMes() {
        saldoCuentaAhorros = saldoCuentaAhorros
                + (saldoCuentaAhorros * 0.006);
        //incrementar el saldo de ahorros en 0.6%
        saldoCDT = saldoCDT
                + (saldoCDT * 0.012);
        //incrementar el CDT en 1.2%
    }

    //métodos que entregan valor de atributos
    public String getNombre() {
        return nombre;
    }

    public String getCedula() {
        return cedula;
    }

    public double getSaldoAhorros() {
        return saldoCuentaAhorros;

    }

    public String getSaldoCorriente() {
        return String.valueOf(saldoCuentaCorriente);
    }

    public String getCDT() {
        return String.valueOf(saldoCDT);
    }
}
