import java.util.Scanner;

public class Index {

  public static void main(String[] args) {
    Index index = new Index();
    Scanner sc = new Scanner(System.in);
    int opt;
    do {
      opt = index.menu();
      switch (opt) {
        case 1:
          System.out.println("FIFO");
          break;
        case 2:
          System.out.println("LRU");
          break;
        case 3:
          System.out.println("FCFS");
          break;
        case 4:
          System.out.println("SJN");
          break;
        case 5:
          System.out.println("SRT");
          break;
        case 6:
          System.out.println("Round RObin");
          break;
        case 7:
          System.out.println("EDF");
          break;
        case 8:
          System.out.println("You exits programs. Thank You!");
      }
    } while (opt != 4);

  }

  public int menu() {

    int opt;
    Scanner sc = new Scanner(System.in);
    do {
      System.out.println("""
          Please Select your calculation:
          1. FIFO(First In First Out)
          2. LRU (Least Recently Used)
          3. FCFS(First Come First Server)
          4. SJN (Shortest Job Next)
          5. SRT (shorttest Remaining Time)
          6. Round Robin
          7. EDF (Earliest Deadline First)
          8. Quit
             Choose an option:
                  """);
      opt = Integer.parseInt(sc.nextLine());
    } while (opt < 1 || opt > 5);

    return opt;
  }
}
