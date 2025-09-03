using System;
using System.Globalization;

class Program
{
    static void Main()
    {
        Console.Write("Enter your birthday (dd-MM): ");
        string input = Console.ReadLine();

        // Try strict parsing
        if (!DateTime.TryParseExact(input, "dd-MM", CultureInfo.InvariantCulture, DateTimeStyles.None, out DateTime parsed))
        {
            Console.WriteLine("Invalid format. Please use dd-MM (e.g., 05-09).");
            return;
        }

        DateTime today = DateTime.Today;

        // Attach current year to parsed birthday
        DateTime birthdayThisYear = new DateTime(today.Year, parsed.Month, parsed.Day);

        // If birthday already passed this year, move to next year
        if (birthdayThisYear < today)
        {
            birthdayThisYear = birthdayThisYear.AddYears(1);
        }

        // Calculate days remaining
        int daysLeft = (birthdayThisYear - today).Days;

        if (daysLeft > 1)
        {
            Console.WriteLine($"Your birthday is in {daysLeft} days!");
        }
        else if (daysLeft == 1)
        {
            Console.WriteLine("🎂 Tomorrow is your birthday!");
        }
        else // daysLeft == 0
        {
            Console.WriteLine("Today is your birthday. Happy Birthday!");
        }

        // Optional beep sound
        Console.Beep(800, 500);
    }
}
