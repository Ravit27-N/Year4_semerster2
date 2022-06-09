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
          index.fifoControll();
          break;
        case 2:
          System.out.println("LRU");
          index.lruControll();
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
             Choose an option: """);
      opt = Integer.parseInt(sc.nextLine());
    } while (opt < 1 || opt > 5);

    return opt;
  }

  public void fifoControll(){
    Scanner sc = new Scanner(System.in);

    int frames; //get frames
    int lenIncome; //get length Income 

    System.out.printf("Please enter Number of frames: ");
    frames = sc.nextInt();

    System.out.printf("Please enter page table size: ");
    lenIncome = sc.nextInt();

    int incomingStream[] = new int[lenIncome];
    
    int i = 0;
    while(i < lenIncome){
      int numIncom = i+1;
      System.out.printf("Enter number of page "+numIncom+"(int): ");
      incomingStream[i] = sc.nextInt();
      i++;
    }

    //test Print Income
    // for(i=0 ; i<lenIncome ; i++){
    //   System.out.print(incomingStream[i]+"\t");
    // }
    
    FIFO fifo = new FIFO();

    String Colorgreen = "\u001B[32m";
    String Colorwhite = "\u001B[37m";
    System.out.printf(Colorgreen);
    
    int pageFaults = fifo.pageFaults(incomingStream,lenIncome,frames);
    int hit =  lenIncome - pageFaults;

    System.out.println("\nFIFO RESULT: ");
    System.out.println("Page faults: " + pageFaults);
    System.out.println("Page fault Ratio: " + (double) pageFaults / lenIncome);
    System.out.println("Success: " + hit);
    System.out.println("Success Ratio : " + (double) hit / lenIncome);
  
    //finish input
    System.out.print("\n\n"+Colorwhite);
  }

  public void lruControll(){
    LRU a = new LRU();

    Scanner src = new Scanner(System.in);

    int p[], n, fr[], m,fs[];

    System.out.printf("\nEnter the Number of frames: ");
    m = src.nextInt();

    System.out.printf("Enter page table size: ");
    n = src.nextInt();
    p = new int[n];
    System.out.printf("Enter each page number\n");
    for (int i = 0; i < n; i++){
      int numIncom = i+1;
      System.out.printf("Enter number of page "+numIncom+"(int): ");
      p[i] = src.nextInt();
    }
      

    fr = new int[m];
    fs = new int[m];

    
    String Colorgreen = "\u001B[32m";
    String Colorwhite = "\u001B[37m";
    System.out.println(Colorgreen+ "LRU Result: ");

    int pageFaults = a.lru(n,m,p,fr,fs);
    int hit = n - pageFaults; //n is lenght of table

    System.out.println("Page faults: " + pageFaults);
    System.out.println("Page fault Ratio: " + (double) pageFaults / n);
    System.out.println("Success: " + hit);
    System.out.println("Success Ratio : " + (double) hit / n);

    System.out.println(Colorwhite+"\n\n");

  }

}
