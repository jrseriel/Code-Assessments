package practice;

import java.util.*;

public class DivisibleNumbers1 {
	public static List<Integer> checkDivisible(int [] a, int [] b) {
		//debug
		//System.out.println(Arrays.toString(a));
		//System.out.println(Arrays.toString(b));
		
		//declare arraylist and result
		List<Integer> list = new ArrayList<Integer>();		
		for (int i = 0; i < a.length; i++) {
			list.add(a[i]);
		}	
		//debug
		//System.out.println(list);
		
		//iterate through list
		for (int x = 0; x < b.length; x++) {
			for (int y = 0; y < list.size(); y++) {
				int result = list.get(y) % b[x];
				if (result == 0) {
					list.add(a[y]);
					//System.out.println(y);
				}
				//System.out.println(y);
				list.remove(0);		
			}
		}
		return list;
	}

	public static void main(String[] args) {
		//fixed array declaration
		int [] divisors = {3,5};
		int [] dividends = new int[100];
		for (int i = 0; i <= 99; i++ ) {
			dividends[i]=i+1;
		}
		
		//Run checkDivisible method
		System.out.println(checkDivisible(dividends, divisors));
	}
}
