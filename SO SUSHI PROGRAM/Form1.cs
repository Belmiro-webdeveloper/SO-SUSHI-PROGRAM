using System.Diagnostics.Metrics;
using System.Windows.Forms;
using Microsoft.VisualBasic;

namespace SO_SUSHI_PROGRAM
{
   
    public partial class Form1 : Form
    {
        const int BHRL = 20; //
        const int CRLL = 20; // (California roll)
        const int FSHS = 15; // (fashion sandwich)
        const int MAKI = 30;// (maki roll)
        const int NGRI = 35; // (nigiri)
        const int SOFT = 22; // (soft drink)
        const int WATR = 10; //  (water)
        const double VATPrice = 0.1; //VAT price
        string food_code = ""; //Food Code
        string quatinty = ""; //items qualtity
        int quatintyiNT = 0; //items qualtity



        public Form1()
        {
            InitializeComponent();

            food_code = Interaction.InputBox("Please Enter a food or Beverage code", "FOOD/BEVERAGE CODE INPUT", "");
            while (food_code == ""){
                if (!ValidateMeal(true, food_code))
                {
                    food_code = Interaction.InputBox("Please Enter a food or Beverage code", "FOOD/BEVERAGE CODE INPUT", "");
                }
               
                    
                

            }
            quatinty = Interaction.InputBox("Please Enter Quantity", "QUANTITY INPUT", "");
            while (quatinty == "")
            {
                if (!ValidateQuantity(true, quatinty))
                {
                    quatinty = "";
                }
                else
                {
                    quatinty = Interaction.InputBox("Please Enter a food or Beverage code", "FOOD/BEVERAGE CODE INPUT", "");
                }

            }


        }

        private void numericUpDown1_ValueChanged(object sender, EventArgs e)
        {

        }

        private void label2_Click(object sender, EventArgs e)
        {

        }

        private void groupBox1_Enter(object sender, EventArgs e)
        {

        }

        private void label3_Click(object sender, EventArgs e)
        {

        }

        private void button1_Click(object sender, EventArgs e)
        {

        }

        private bool ValidateMeal(bool blnValidCode, string strFoodBevCode)
        {
            if (strFoodBevCode != "BHRL" && strFoodBevCode != "CRLL" && strFoodBevCode != "FSHS" &&
            strFoodBevCode != "MAKI" && strFoodBevCode != "NGRI" && strFoodBevCode != "SOFT" &&
            strFoodBevCode != "WATR")
            {
                blnValidCode = false;
                MessageBox.Show("Please enter valid food or beverage code", "ERROR");
            }
            return blnValidCode;
        }
       
             private bool ValidateQuantity(bool blnValidCode, string strFoodBevCode)
        {
            int x =0;

            try
            {
                x = Int32.Parse(strFoodBevCode);
              
            }
            catch (FormatException)
            {
                blnValidCode = false;
                MessageBox.Show("Please enter valid Number format", "ERROR");
            }
            if (x<=0)
            {
                blnValidCode = false;
                MessageBox.Show("Please Enter number greater than 0", "ERROR");
            }
            return blnValidCode;
        }

    }
}