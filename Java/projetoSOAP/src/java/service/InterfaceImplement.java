
package service;

import javax.jws.WebService;

@WebService(endpointInterface = "service.Interface")
public class InterfaceImplement implements Interface {

    @Override
    public float som(float num1, float num2) {
        return num1 + num2;
    }

    @Override
    public float sub(float num1, float num2) {
        return num1 - num2;
    }

    @Override
    public float multi(float num1, float num2) {
        return num1 * num2;
    }

    @Override
    public float div(float num1, float num2) {
        return num1 / num2;
    }
    
}
