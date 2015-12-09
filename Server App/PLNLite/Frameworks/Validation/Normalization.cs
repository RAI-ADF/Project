using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;

namespace PLNLite.Frameworks.Validation
{
    public class Normalization
    {
        public static string FilterNumberOfDigit(string DIGIT, int TOTAL)
        {
            if (TOTAL > DIGIT.Length)
            {
                int _init = DIGIT.Length;

                for (int i = 0; i < TOTAL - _init; i++)
                {
                    DIGIT = "0" + DIGIT;
                }
                return DIGIT;
            }
            else
            {
                return DIGIT;
            }
        }
    }
}