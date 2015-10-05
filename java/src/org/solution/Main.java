package org.solution;
import java.util.Scanner;
import java.util.Stack;

public class Main {


	public static void main(String[] args) {
		
		Scanner scn = new Scanner(System.in);
		Integer result = 0;
		Integer value = 0;
		Stack<Integer> stack = new Stack<>();
		
		while (true)
		{
			boolean running = true;
			String[] input = scn.nextLine().split(" ");
			String command = input.length < 1 ? null : input[0] ;
			Integer operand = null;
			
			if (input.length >= 2) {
				operand = Integer.parseInt(input[1]);
			} else {
				if (stack.size() == 0) {
					stack.push(1);
				}
			}
			
			// 1 2 A 3 M
			
			switch (command) {
				case "P":
					stack.push(operand);
					break;
				case "A":
					result = stack.firstElement();
					
					while (stack.size() > 1) {
						result += stack.pop();
					}
					
					stack.pop();
					stack.push(result);
					break;
				case "S":
					result = stack.firstElement();
					
					while (stack.size() > 1) {
						result -= stack.pop();
					}
					
					stack.pop();
					stack.push(result);
					break;
				case "M":
					result = stack.firstElement();
					
					while (stack.size() > 1) {
						result *= stack.pop();
					}
					
					stack.pop();
					stack.push(result);
					break;
				case "D":
					result = stack.firstElement();
					
					while (stack.size() > 1) {
						result /= stack.pop();
					}
					
					stack.pop();
					stack.push(result);
					break;
				case "R":
					running = false;
					break;
			}
			
			if ( ! running) {
				break;
			}
		}
		
		System.out.println(stack.pop());
		
		
	}
}
