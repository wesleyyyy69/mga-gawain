using System;

class PalindromeDetector
{
    static void Main()
    {
        Console.Write("Enter a word or phrase: ");
        string input = Console.ReadLine();

    
        string normalized = Normalize(input);

        
        if (IsPalindrome(normalized))
            Console.WriteLine("✅ The input is a palindrome!");
        else
            Console.WriteLine("❌ The input is NOT a palindrome.");
    }

    static string Normalize(string text)
    {
        char[] arr = text.ToLower().ToCharArray();
        string cleaned = "";

        foreach (char c in arr)
        {
            if (char.IsLetterOrDigit(c))
                cleaned += c;
        }

        return cleaned;
    }

    static bool IsPalindrome(string text)
    {
        int left = 0;
        int right = text.Length - 1;

        while (left < right)
        {
            if (text[left] != text[right])
                return false;

            left++;
            right--;
        }

        return true;
    }
}
