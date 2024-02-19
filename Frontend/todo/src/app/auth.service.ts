import { Injectable } from '@angular/core';
import { HttpClient } from '@angular/common/http';

@Injectable({
  providedIn: 'root'
})
export class AuthService {
  private apiUrl = "http://127.0.0.1:8000/api"
  constructor(private http:HttpClient) { }

  login(email: string, password: string) {
    return this.http.post<any>(`${this.apiUrl}/login`, { email, password });
  }

  register(data: any) {
    return this.http.post<any>(`${this.apiUrl}/register`, data);
  }
  isLoggedIn(): boolean {
    debugger;
    const authToken = localStorage.getItem('authToken');
    return authToken !== null;
  }
}
