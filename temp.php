<?php

class HomeController
{
    public function index()
    {
        return $this->view();
    }

    public function convertTemperature($form)
    {
        if (isset($form['celsius'])) {
            try {
                $celsius = floatval($form['celsius']);
                $fahrenheit = $celsius * 9 / 5 + 32;
                $data['Celsius'] = $celsius;
                $data['Fahrenheit'] = $fahrenheit;
                return $this->view('Result', $data);
            } catch (Exception $e) {
                $data['ErrorMessage'] = 'Invalid input';
                return $this->view('Error', $data);
            }
        } elseif (isset($form['fahrenheit'])) {
            try {
                $fahrenheit = floatval($form['fahrenheit']);
                $celsius = ($fahrenheit - 32) * 5 / 9;
                $data['Celsius'] = $celsius;
                $data['Fahrenheit'] = $fahrenheit;
                return $this->view('Result', $data);
            } catch (Exception $e) {
                $data['ErrorMessage'] = 'Invalid input';
                return $this->view('Error', $data);
            }
        } else {
            $data['ErrorMessage'] = 'No input provided';
            return $this->view('Error', $data);
        }
    }

    private function view($viewName = '', $data = [])
    {
        // Implement your view rendering logic here
        // Return the rendered view
    }
}
