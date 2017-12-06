package practice;

import static org.junit.Assert.*;

import org.junit.Test;

import junit.framework.TestCase;

public class DivisibleNumbersTest extends TestCase {
	
	@Test
	public void testcheckDivisible() {
		//Template for values
		int [] divisors = {3,5};
		int [] dividends = new int[100];
		for (int i = 0; i <= 99; i++ ) {
			dividends[i]=i+1;
		}
		
		//Tests
		//DivisibleNumbers.checkDivisible(dividends, divisors) test1 = new DivisibleNumbers.checkDivisible(dividends, divisors); 
		fail("Not yet implemented");
	}

}
