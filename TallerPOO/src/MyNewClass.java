/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 *
 * @author niwde
 */
public class MyNewClass {
    
    private int x;
    
    public void calcular(int n) throws Exception{
    
        if(n==0){            
            throw new NullPointerException("No se ha proporcionado un dato");
        }
        if(n==99){
            throw new ArithmeticException("Supera el limite permitido");
        }else if(n>99){
            throw new Exception("No puedo manipular estos datos");
        }
        x = n/11;
        
    }    
    
}
