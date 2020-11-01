import java.util.Calendar;

public class Exemplo {

  public static void main(String[] args) {
    Calendar agora = Calendar.getInstance();
    
    int h = agora.get(Calendar.HOUR) + ((Calendar.PM==1)?12:0);
    int m = agora.get(Calendar.MINUTE);
    int s = agora.get(Calendar.SECOND);

    String result = tempoPorExtenso(h, 1);
    if ((m != 0) && (s != 0)) 
       result = result + ", " + tempoPorExtenso(m, 2) + " e " +
                                tempoPorExtenso(s, 3);
    else if (m != 0) 
            result = result + " e " + tempoPorExtenso(m, 2);
         else if (s != 0) 
                 result = result + " e " + tempoPorExtenso(s, 3);
    System.out.printf("Resultado:\n%s\n", result);
  }

  public static String tempoPorExtenso(int n, int tipo) {
    String parte[] = {"zero", "um", "dois", "três",
             "quatro", "cinco", "seis", "sete", "oito", "nove",
             "dez", "onze", "doze", "treze", "quatorze", "quinze",
             "dezesseis", "dezessete", "dezoito", "dezenove"};

    String dezena[] = {"", "", "vinte", "trinta", "quarenta", "cinquenta"};

    String s;

    if (n <= 19) {
       if ((tipo == 1) && (n == 1)) 
          s = "uma";
       else if ((tipo == 1) && (n == 2)) 
               s = "duas";
            else s = parte[n];
    }
    else {
      int dez = n / 10;
      int unid = n % 10;
      s = dezena[dez];
      if (unid != 0) {
         if ((tipo == 1) && (unid == 1)) 
            s = s + " e uma";
         else if ((tipo == 1) && (unid == 2)) 
                 s = s + " e duas";
              else s = s + " e " + parte[unid];
      }
    }

    if (tipo == 1)
       s = s + " hora";
    else if (tipo == 2)
            s = s + " minuto";
         else s = s + " segundo";

    if (n > 1) 
       s = s + "s";

    return(s); 
  }

}