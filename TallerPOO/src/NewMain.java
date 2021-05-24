
import java.util.logging.Level;
import java.util.logging.Logger;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 *
 * @author niwde
 */
public class NewMain {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
        // TODO code application logic here
        
        MyNewClass aaa = new MyNewClass();
                
        try {
            aaa.calcular(0);
        } catch (NullPointerException e) {
            System.out.println("Error"+e.getMessage());            
        }catch (ArithmeticException e) {
            System.out.println("Error");            
        }catch (Exception e) {
            System.out.println("Error");            
        }
        
        System.out.println("Todo en orden");
        
        
        
        
    }
    
}
