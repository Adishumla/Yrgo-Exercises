// See https://aka.ms/new-console-template for more information

var A = 50;
var B = 45;
var C = 90;

var min = new[] { A, B, C }.Min();
var cost = A + B + C - min;
Console.WriteLine(cost);